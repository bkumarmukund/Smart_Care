package Doctors;

import Main.Connector;
import Main.Hospital;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.ImageIcon;
import javax.swing.JOptionPane;

public class Appointment extends javax.swing.JFrame {

    PreparedStatement ps = null;
    ResultSet rs = null;
    Connection connection = null;
    String patientID;
    String disease;
    public static String doctorID;

    public Appointment(String patID) {
        initComponents();
        patientID = patID;
        ImageIcon ic = new ImageIcon(getClass().getResource("/Images/hospital.png"));
        this.setIconImage(ic.getImage());

        connection = Connector.ConnectDb();
        String sql = "SELECT disease, appointment.patientID, FN, LN, age, gender, bloodgroup FROM patient INNER JOIN appointment on appointment.patientID = patient.patientID where appointment.patientID= '" + patientID + "'  AND appointmentSTATUS = 1";
        //String sql = "SELECT patientID, FN, LN, age, gender FROM patient WHERE patientID = '" + patientID + "'";
        try {
            ps = connection.prepareStatement(sql);
            rs = ps.executeQuery();
            rs.first();
            int iage = rs.getInt("age");
            String gender = rs.getString("gender");
            String age = Integer.toString(iage);
            disease = rs.getString("disease");
            Pdiseaselbl.setText(rs.getString("disease"));
            pNamelbl.setText(rs.getString("FN")+" "+rs.getString("LN"));
            pIdlbl.setText(patientID);
            pAgelbl.setText(age);
            pGenderlbl.setText(gender);

        } catch (SQLException e) {
            JOptionPane.showMessageDialog(null, "Something Went Wrong");
        }

    }

    public Appointment() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel3 = new javax.swing.JPanel();
        jLabel10 = new javax.swing.JLabel();
        jLabel16 = new javax.swing.JLabel();
        jLabel21 = new javax.swing.JLabel();
        pNamelbl = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        pAgelbl = new javax.swing.JLabel();
        pIdlbl = new javax.swing.JLabel();
        pGenderlbl = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jLabel8 = new javax.swing.JLabel();
        appointmentBtn = new javax.swing.JButton();
        jLabel3 = new javax.swing.JLabel();
        Pdiseaselbl = new javax.swing.JLabel();
        doneDiagnose = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        appointmentDAYS = new javax.swing.JTextField();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Check Appoinments !");

        jPanel3.setBackground(new java.awt.Color(0, 153, 153));

        jLabel10.setFont(new java.awt.Font("Arial", 0, 24)); // NOI18N
        jLabel10.setForeground(new java.awt.Color(255, 255, 255));
        jLabel10.setText("Appointments");

        jLabel16.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Icon/cross.png"))); // NOI18N
        jLabel16.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel16MouseClicked(evt);
            }
        });

        jLabel21.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Icon/backs.png"))); // NOI18N
        jLabel21.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel21MouseClicked(evt);
            }
        });

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jLabel10)
                .addGap(405, 405, 405)
                .addComponent(jLabel21)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel16)
                .addContainerGap())
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addGroup(jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                    .addComponent(jLabel10, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.LEADING, jPanel3Layout.createSequentialGroup()
                        .addContainerGap()
                        .addGroup(jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel21)
                            .addComponent(jLabel16))))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        pNamelbl.setFont(new java.awt.Font("Arial", 0, 18)); // NOI18N
        pNamelbl.setForeground(new java.awt.Color(255, 102, 102));
        pNamelbl.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        pNamelbl.setText("Patient Name");

        jLabel2.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(0, 204, 204));
        jLabel2.setText("Age:");

        pAgelbl.setFont(new java.awt.Font("Arial", 0, 18)); // NOI18N
        pAgelbl.setForeground(new java.awt.Color(153, 153, 153));
        pAgelbl.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        pAgelbl.setText("Patient Age");

        pIdlbl.setFont(new java.awt.Font("Arial", 0, 18)); // NOI18N
        pIdlbl.setForeground(new java.awt.Color(153, 153, 153));
        pIdlbl.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        pIdlbl.setText("Patient Id");

        pGenderlbl.setFont(new java.awt.Font("Arial", 0, 18)); // NOI18N
        pGenderlbl.setForeground(new java.awt.Color(153, 153, 153));
        pGenderlbl.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        pGenderlbl.setText("Patient Gender");

        jLabel7.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        jLabel7.setForeground(new java.awt.Color(0, 204, 204));
        jLabel7.setText("ID:");

        jLabel8.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        jLabel8.setForeground(new java.awt.Color(0, 204, 204));
        jLabel8.setText("Gender:");

        appointmentBtn.setBackground(new java.awt.Color(0, 204, 204));
        appointmentBtn.setFont(new java.awt.Font("Tahoma", 0, 18)); // NOI18N
        appointmentBtn.setForeground(new java.awt.Color(255, 255, 255));
        appointmentBtn.setText("History");
        appointmentBtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                appointmentBtnActionPerformed(evt);
            }
        });

        jLabel3.setFont(new java.awt.Font("Dialog", 1, 18)); // NOI18N
        jLabel3.setForeground(new java.awt.Color(0, 204, 204));
        jLabel3.setText("Disease");

        Pdiseaselbl.setFont(new java.awt.Font("Dialog", 1, 18)); // NOI18N
        Pdiseaselbl.setForeground(new java.awt.Color(153, 153, 153));
        Pdiseaselbl.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        Pdiseaselbl.setText("Disease");

        doneDiagnose.setBackground(new java.awt.Color(51, 255, 0));
        doneDiagnose.setFont(new java.awt.Font("Dialog", 1, 18)); // NOI18N
        doneDiagnose.setForeground(new java.awt.Color(255, 255, 255));
        doneDiagnose.setText("Done");
        doneDiagnose.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                doneDiagnoseActionPerformed(evt);
            }
        });

        jLabel1.setText("Next Appointment after");

        jLabel4.setFont(new java.awt.Font("Dialog", 1, 18)); // NOI18N
        jLabel4.setText("Days");

        appointmentDAYS.setBackground(new java.awt.Color(102, 255, 51));
        appointmentDAYS.setFont(new java.awt.Font("Dialog", 0, 24)); // NOI18N
        appointmentDAYS.setForeground(new java.awt.Color(255, 255, 255));
        appointmentDAYS.setHorizontalAlignment(javax.swing.JTextField.CENTER);
        appointmentDAYS.setText("0");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(pNamelbl, javax.swing.GroupLayout.PREFERRED_SIZE, 220, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(503, 503, 503))
            .addGroup(layout.createSequentialGroup()
                .addGap(317, 317, 317)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(appointmentDAYS, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jLabel4)
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel2)
                            .addComponent(jLabel3))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 84, Short.MAX_VALUE)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(pAgelbl, javax.swing.GroupLayout.DEFAULT_SIZE, 220, Short.MAX_VALUE)
                                    .addComponent(Pdiseaselbl, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                                .addGap(18, 18, 18)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel7)
                                    .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, 88, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                    .addComponent(pGenderlbl, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(pIdlbl, javax.swing.GroupLayout.DEFAULT_SIZE, 220, Short.MAX_VALUE)))
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(appointmentBtn, javax.swing.GroupLayout.PREFERRED_SIZE, 116, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(181, 181, 181)
                                .addComponent(doneDiagnose, javax.swing.GroupLayout.PREFERRED_SIZE, 112, javax.swing.GroupLayout.PREFERRED_SIZE)))
                        .addContainerGap(208, Short.MAX_VALUE))))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(35, 35, 35)
                .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, 60, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(33, 33, 33)
                .addComponent(pNamelbl, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(26, 26, 26)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(55, 55, 55)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(pAgelbl, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel7, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(pIdlbl, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel3)
                            .addComponent(Pdiseaselbl, javax.swing.GroupLayout.PREFERRED_SIZE, 42, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(pGenderlbl, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addGap(44, 44, 44)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 38, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel4)
                    .addComponent(appointmentDAYS, javax.swing.GroupLayout.PREFERRED_SIZE, 47, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(49, 49, 49)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(doneDiagnose, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(appointmentBtn, javax.swing.GroupLayout.DEFAULT_SIZE, 43, Short.MAX_VALUE))
                .addContainerGap(102, Short.MAX_VALUE))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void jLabel16MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel16MouseClicked
        Hospital hospital = new Hospital();
        hospital.setVisible(true);
        dispose();
    }//GEN-LAST:event_jLabel16MouseClicked

    private void jLabel21MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel21MouseClicked
        doctorActivity dActivity = new doctorActivity(doctorID);
        dActivity.setVisible(true);
        dispose();
    }//GEN-LAST:event_jLabel21MouseClicked

    private void appointmentBtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_appointmentBtnActionPerformed
        patientDetails pDetails = new patientDetails(patientID);
        pDetails.setVisible(true);
        dispose();
    }//GEN-LAST:event_appointmentBtnActionPerformed

    private void doneDiagnoseActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_doneDiagnoseActionPerformed
        // TODO add your handling code here:
        connection = Connector.ConnectDb();
        if (connection != null) {
            int nextapp = Integer.parseInt(appointmentDAYS.getText());
            String sql = "insert into medicalHISTORY (patHID, disease, nextSCHEDULE, docHID) values (?,?,?,?)";

            try {
                ps = connection.prepareStatement(sql);
                ps.setString(1, patientID);
                ps.setString(2, disease);
                ps.setInt(3, nextapp);
                ps.setString(4, doctorID);
                ps.execute();
                JOptionPane.showMessageDialog(null, "Appointment with "+pNamelbl.getText()+" completed");
                doctorActivity dActivity = new doctorActivity(doctorID);
                dActivity.setVisible(true);
                dispose();
            }catch (SQLException e) {
                //System.out.println(e);
                JOptionPane.showMessageDialog(null, "Something Went Wrong");
            }
    }//GEN-LAST:event_doneDiagnoseActionPerformed
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {

        java.awt.EventQueue.invokeLater(() -> {
            new Appointment().setVisible(true);
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel Pdiseaselbl;
    private javax.swing.JButton appointmentBtn;
    private javax.swing.JTextField appointmentDAYS;
    private javax.swing.JButton doneDiagnose;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel16;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel21;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JLabel pAgelbl;
    private javax.swing.JLabel pGenderlbl;
    private javax.swing.JLabel pIdlbl;
    private javax.swing.JLabel pNamelbl;
    // End of variables declaration//GEN-END:variables
}
